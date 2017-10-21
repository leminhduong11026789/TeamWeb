<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Repositories\BannerRepository;
use App\Repositories\TagRepository;
use App\Repositories\OnlineCourseRepository;
use App\Repositories\OnlineCourseCategoryRepository;
use App\Repositories\UserCourseRepository;
use DB;

class HomeController extends AppBaseController
{
    private $bannerRepository;
    private $tagRepository;
    private $onlineCourseRepository;
    private $onlineCourseCategoryRepository;
    private $userCourseCategoryRepository;

    public function __construct(BannerRepository $bannerRepo, TagRepository $tagRepo, OnlineCourseRepository $onlineCourseRepo, OnlineCourseCategoryRepository $onlineCourseCategoryRepo, UserCourseRepository $userCourseRepo ){

        $this->bannerRepository = $bannerRepo;
        $this->tagRepository = $tagRepo;
        $this->onlineCourseRepository = $onlineCourseRepo;
        $this->onlineCourseCategoryRepository = $onlineCourseCategoryRepo;
        $this->userCourseCategoryRepository = $userCourseRepo;
    }


    public function index(Request $request)
    {


        $onlineCourses = $this->prepareConditions($request);
        $tags = $this->tagRepository->all()->take(10);
        $onlineCourseCategories = $this->onlineCourseCategoryRepository->all()->take(17);
        $superBanners = $this->bannerRepository->findWhere([['actived', '=', 1], ['featured', '=', 0]], ['*'])->take(2);
        $banners = $this->bannerRepository->findWhere([['actived', '=', 1], ['featured', '=', 2]], ['*'])->take(3);
        $subcriber_collection = collect([]);


        return view('frontend.home.index', compact("onlineCourseCategories", "superBanners", "banners", "subcriber_collection", "tags", "onlineCourses"));

    }

    public function prepareConditions($request){
        $onlineCourses = DB::table('online_courses');

        if($request->category != null){
            $category = $this->onlineCourseCategoryRepository->findWhere([['slug', '=', $request->category]], ['*'])->first();
            $onlineCourse_ids = $category->courses->pluck('id')->toArray();
            $onlineCourses = $onlineCourses->whereIn('id', $onlineCourse_ids);
        }

        if (isset($request->level) && $request->level == 1){
            $onlineCourses = $onlineCourses->where('level', '=', 1);
        }
        if (isset($request->level) && $request->level == 2){
            $onlineCourses = $onlineCourses->where('level', '=', 2);
        }
        if (isset($request->level) && $request->level == 3){
            $onlineCourses = $onlineCourses->where('level', '=', 3);
        }
        if (isset($request->promotion) && $request->promotion == "discount"){
            $onlineCourses = $onlineCourses->where('cost_sale', '>', 0);
        }
        if (isset($request->promotion) && $request->promotion == "free"){
            $onlineCourses = $onlineCourses->where('cost', '=', 0);
        }
        if (isset($request->sort) && $request->sort == "new"){
            $onlineCourses = $onlineCourses->orderBy('updated_at', 'desc');
        }
        elseif (isset($request->sort) && $request->sort == "promotion"){
            $onlineCourses = $onlineCourses->orderBy('cost_sale', 'desc');
        }elseif (isset($request->sort) && $request->sort == "feature"){
            $onlineCourses = $onlineCourses->orderBy('cost_sale', 'desc');
        }

        return $onlineCourses;
    }
}
