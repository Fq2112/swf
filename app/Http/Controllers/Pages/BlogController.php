<?php

namespace App\Http\Controllers\Pages;

use App\User;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function showBlog(Request $request)
    {
        $categories = BlogCategory::orderBy('name')->get();
        $blog = Blog::orderBy('title')->get();
        $keyword = $request->q;
        $category = $request->category;
        $page = $request->page;

        \App\Models\Visitor::hit();
        return view('pages.blog.index', compact('categories', 'blog', 'keyword', 'category', 'page'));
    }

    public function getDataBlog(Request $request)
    {
        if ($request->category == 'all') {
            $blog = Blog::where('title', 'LIKE', '%' . $request->q . '%')
                ->orderByDesc('id')->paginate(12)->toArray();
        } else {
            $blog = Blog::where('title', 'LIKE', '%' . $request->q . '%')
                ->where('category_id', $request->category)->orderByDesc('id')->paginate(12)->toArray();
        }

        $i = 0;
        foreach ($blog['data'] as $row) {
            $user = User::where('id', $row['user_id'])->first();
            $date = Carbon::parse($row['created_at']);
            $url = route('detail.blog', ['author' => $user->username, 'y' => $date->format('Y'),
                'm' => $date->format('m'), 'd' => $date->format('d'),
                'title' => $row['title_uri']]);

            $arr = array(
                'author' => $user->username,
                'category' => BlogCategory::where('id', $row['category_id'])->first()->name,
                'date' => Carbon::parse($row['created_at'])->formatLocalized('%b %d, %Y'),
                '_thumbnail' => asset('storage/blog/thumbnail/'.$row['thumbnail']),
                '_url' => $url,
                '_content' => Str::words($row['content'], 20, '...') . '</p>'
            );

            $blog['data'][$i] = array_replace($arr, $blog['data'][$i]);
            $i = $i + 1;
        }

        return $blog;
    }

    public function getTitleBlog($title)
    {
        $blogs = Blog::where('title', 'LIKE', '%' . $title . '%')->get();

        foreach ($blogs as $blog) {
            $blog->label = $blog->getBlogCategory->name . ' - ' . $blog->title;
        }

        return $blogs;
    }

    public function showDetailBlog($author, $year = null, $month = null, $date = null, $title = null)
    {
        $user = User::where('username', $author)->firstOrFail();

        if (!$year && !$month && !$date && !$title) {
            $latest = Blog::where('user_id', $user->id)->orderByDesc('id')->take(5)->get();
            $archive = Blog::where('user_id', $user->id)->get()->groupBy(function ($q) {
                return Carbon::parse($q->created_at)->format('F Y');
            });

            \App\Models\Visitor::hit();
            return view('pages.blog.author', compact('user', 'latest', 'archive'));

        } else {
            $blog = Blog::where('user_id', $user->id)->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)->whereDay('created_at', $date)
                ->where('title_uri', $title)->firstOrFail();
            $relates = Blog::where('category_id', $blog->category_id)->wherenotin('id', [$blog->id])->orderByDesc('id')->get();

            $tgl = Carbon::parse($blog->created_at);
            $uri = route('detail.blog', ['author' => $user->username, 'y' => $tgl->format('Y'),
                'm' => $tgl->format('m'), 'd' => $tgl->format('d'),
                'title' => $blog->title_uri]);

            \App\Models\Visitor::hit();
            return view('pages.blog.detail', compact('user', 'blog', 'relates', 'uri'));
        }
    }
}
