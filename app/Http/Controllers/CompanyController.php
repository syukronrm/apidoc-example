<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    /**
     * @api {get} /api/companies/:id Get a company
     * @apiGroup Company
     * @apiDescription Get a company. This is the description.
     * 
     * @apiUse DefaultHeader
     * @apiUse DefaultError
     *
     * @apiParamExample {cli} Request example:
     *  curl https://example.com/api/companies/cad3cf57-105a-4647-a9dc-ddc52a6ec654
     * 
     * @apiSuccess id Company id
     * @apiSuccess name Company name
     * @apiSuccess location Company location
     * 
     * @apiSuccessExample {json} Response example:
     *  {
     *    "id": "cad3cf57-105a-4647-a9dc-ddc52a6ec654",
     *    "name": "Shell Co. Ltd.",
     *    "location": "Stockholm",
     *  }
     */
    public function show()
    {

    }
}
