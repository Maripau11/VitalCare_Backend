<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatephotosRequest;
use App\Http\Requests\UpdatephotosRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\photosRepository;
use Illuminate\Http\Request;
use Flash;

class photosController extends AppBaseController
{
    /** @var photosRepository $photosRepository*/
    private $photosRepository;

    public function __construct(photosRepository $photosRepo)
    {
        $this->photosRepository = $photosRepo;
    }

    /**
     * Display a listing of the photos.
     */
    public function index(Request $request)
    {
        $photos = $this->photosRepository->paginate(10);

        return view('photos.index')
            ->with('photos', $photos);
    }

    /**
     * Show the form for creating a new photos.
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created photos in storage.
     */
    public function store(CreatephotosRequest $request)
    {
        $input = $request->all();

        $photos = $this->photosRepository->create($input);

        Flash::success('Photos saved successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Display the specified photos.
     */
    public function show($id)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        return view('photos.show')->with('photos', $photos);
    }

    /**
     * Show the form for editing the specified photos.
     */
    public function edit($id)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        return view('photos.edit')->with('photos', $photos);
    }

    /**
     * Update the specified photos in storage.
     */
    public function update($id, UpdatephotosRequest $request)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        $photos = $this->photosRepository->update($request->all(), $id);

        Flash::success('Photos updated successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Remove the specified photos from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        $this->photosRepository->delete($id);

        Flash::success('Photos deleted successfully.');

        return redirect(route('photos.index'));
    }
}
