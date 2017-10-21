<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLienHeKhachRequest;
use App\Http\Requests\UpdateLienHeKhachRequest;
use App\Repositories\LienHeKhachRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LienHeKhachController extends AppBaseController
{
    /** @var  LienHeKhachRepository */
    private $lienHeKhachRepository;

    public function __construct(LienHeKhachRepository $lienHeKhachRepo)
    {
        $this->lienHeKhachRepository = $lienHeKhachRepo;
    }

    /**
     * Display a listing of the LienHeKhach.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->lienHeKhachRepository->pushCriteria(new RequestCriteria($request));
        $lienHeKhaches = $this->lienHeKhachRepository->all();

        return view('backend.lien_he_khaches.index')
            ->with('lienHeKhaches', $lienHeKhaches);
    }

    /**
     * Show the form for creating a new LienHeKhach.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.lien_he_khaches.create');
    }

    /**
     * Store a newly created LienHeKhach in storage.
     *
     * @param CreateLienHeKhachRequest $request
     *
     * @return Response
     */
    public function store(CreateLienHeKhachRequest $request)
    {
        $input = $request->all();

        $lienHeKhach = $this->lienHeKhachRepository->create($input);

        Flash::success('Lien He Khach saved successfully.');

        return redirect(route('admin.lienHeKhaches.index'));
    }

    /**
     * Display the specified LienHeKhach.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lienHeKhach = $this->lienHeKhachRepository->findWithoutFail($id);

        if (empty($lienHeKhach)) {
            Flash::error('Lien He Khach not found');

            return redirect(route('admin.lienHeKhaches.index'));
        }

        return view('backend.lien_he_khaches.show')->with('lienHeKhach', $lienHeKhach);
    }

    /**
     * Show the form for editing the specified LienHeKhach.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lienHeKhach = $this->lienHeKhachRepository->findWithoutFail($id);

        if (empty($lienHeKhach)) {
            Flash::error('Lien He Khach not found');

            return redirect(route('admin.lienHeKhaches.index'));
        }

        return view('backend.lien_he_khaches.edit')->with('lienHeKhach', $lienHeKhach);
    }

    /**
     * Update the specified LienHeKhach in storage.
     *
     * @param  int              $id
     * @param UpdateLienHeKhachRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLienHeKhachRequest $request)
    {
        $lienHeKhach = $this->lienHeKhachRepository->findWithoutFail($id);

        if (empty($lienHeKhach)) {
            Flash::error('Lien He Khach not found');

            return redirect(route('admin.lienHeKhaches.index'));
        }

        $lienHeKhach = $this->lienHeKhachRepository->update($request->all(), $id);

        Flash::success('Lien He Khach updated successfully.');

        return redirect(route('admin.lienHeKhaches.index'));
    }

    /**
     * Remove the specified LienHeKhach from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lienHeKhach = $this->lienHeKhachRepository->findWithoutFail($id);

        if (empty($lienHeKhach)) {
            Flash::error('Lien He Khach not found');

            return redirect(route('admin.lienHeKhaches.index'));
        }

        $this->lienHeKhachRepository->delete($id);

        Flash::success('Lien He Khach deleted successfully.');

        return redirect(route('admin.lienHeKhaches.index'));
    }
}
