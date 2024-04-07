<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createphoto_detailsRequest;
use App\Http\Requests\Updatephoto_detailsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\photo_detailsRepository;
use Illuminate\Http\Request;
use Flash;

class photo_detailsController extends AppBaseController
{
    /** @var photo_detailsRepository $photoDetailsRepository*/
    private $photoDetailsRepository;

    public function __construct(photo_detailsRepository $photoDetailsRepo)
    {
        $this->photoDetailsRepository = $photoDetailsRepo;
    }

    /**
     * Display a listing of the photo_details.
     */
    public function index(Request $request)
    {
        $photoDetails = $this->photoDetailsRepository->paginate(10);

        return view('photo_details.index')
            ->with('photoDetails', $photoDetails);
    }

    /**
     * Show the form for creating a new photo_details.
     */
    public function create()
    {
        return view('photo_details.create');
    }

    /**
     * Store a newly created photo_details in storage.
     */
    public function store(Createphoto_detailsRequest $request)
    {
        $input = $request->all();

        $photoDetails = $this->photoDetailsRepository->create($input);

        Flash::success('Photo Details saved successfully.');

        return redirect(route('photoDetails.index'));
    }

    /**
     * Display the specified photo_details.
     */
    public function show($id)
    {
        $photoDetails = $this->photoDetailsRepository->find($id);

        if (empty($photoDetails)) {
            Flash::error('Photo Details not found');

            return redirect(route('photoDetails.index'));
        }

        return view('photo_details.show')->with('photoDetails', $photoDetails);
    }

    /**
     * Show the form for editing the specified photo_details.
     */
    public function edit($id)
    {
        $photoDetails = $this->photoDetailsRepository->find($id);

        if (empty($photoDetails)) {
            Flash::error('Photo Details not found');

            return redirect(route('photoDetails.index'));
        }

        return view('photo_details.edit')->with('photoDetails', $photoDetails);
    }

    /**
     * Update the specified photo_details in storage.
     */
    public function update($id, Updatephoto_detailsRequest $request)
    {
        $photoDetails = $this->photoDetailsRepository->find($id);

        if (empty($photoDetails)) {
            Flash::error('Photo Details not found');

            return redirect(route('photoDetails.index'));
        }

        $photoDetails = $this->photoDetailsRepository->update($request->all(), $id);

        Flash::success('Photo Details updated successfully.');

        return redirect(route('photoDetails.index'));
    }

    /**
     * Remove the specified photo_details from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $photoDetails = $this->photoDetailsRepository->find($id);

        if (empty($photoDetails)) {
            Flash::error('Photo Details not found');

            return redirect(route('photoDetails.index'));
        }

        $this->photoDetailsRepository->delete($id);

        Flash::success('Photo Details deleted successfully.');

        return redirect(route('photoDetails.index'));
    }
}
