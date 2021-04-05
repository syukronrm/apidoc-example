<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * @api {post} /api/users Create a user
     * @apiGroup User
     * @apiDescription Create a octg user. This is the description.
     * 
     * This is a multiline markdown text.
     * You can add pretty much _anything_.
     * 
     * ![Oke](https://media.tenor.com/images/af715c0a6016e077e27d332bb9858966/tenor.gif)
     * 
     * Pastikan API tidak ambigu.
     * 
     * @apiUse DefaultHeader
     * @apiUse DefaultError
     * 
     * @apiParam {String} name User name
     * @apiParam {String} email User email
     * @apiParamExample {json} Request example:
     *  {
     *    "email": "johndoe@example.com",
     *    "name": "John Doe",
     *  }
     * 
     * @apiSuccess id User id
     * @apiSuccess name User name
     * @apiSuccess email User email
     * 
     * @apiSuccessExample {json} Response example:
     *  {
     *    "id": "b47562348364badf",
     *    "email": "johndoe@example.com",
     *    "name": "John Doe",
     *  }
     */
    public function create()
    {
        //
    }

    /**
     * @api {get} /api/users Get users
     * @apiGroup User
     * @apiDescription Get all users
     * 
     * @apiUse DefaultHeader
     * @apiUse DefaultError
     * 
     * @apiParam {String} [company] User company
     * 
     * @apiParamExample {cli} Request example:
     *   curl http://example.com/api/users?company=shell
     * 
     * @apiSuccess {Integer} total Total data
     * @apiSuccess {Object[]} data Users returned
     * @apiSuccess {String} data.id User ID
     * @apiSuccess {String} data.email User email
     * @apiSuccess {String} data.name User name
     * 
     * @apiSuccessExample {json} Response example:
     *  {
     *      "total": 2,
     *      "data": [
     *          {
     *              "id": "bc780f99-e004-4be3-a2dc-33658ac2f7cc",
     *              "email": "johndoe@example.com",
     *              "name": "John Doe"
     *          },
     *          {
     *              "id": "6f5a32a2-cba2-4f1a-b43f-5c12c4b94dbf",
     *              "email": "dave@example.com",
     *              "name": "Dave"
     *          }
     *      ]
     *  }
     */
    public function get()
    {
        //
    }
}
