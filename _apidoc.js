/**
 * @apiDefine DefaultHeader
 *
 * @apiHeader {String} authorization Authorization token in `Bearer <token>` format.
 * @apiHeader {String} content-type=application/json Content type. 
 */

/**
 * @apiDefine DefaultError
 * @apiError Unauthorized Invalid authorization
 * @apiError BadRequest Bad request
 * 
 * @apiErrorExample {json} Unauthorized Error:
 *  HTTP/1.1 401 Unauthorized
 *  {
 *      "type": "https://example.net/auth-error",
 *      "title": "Invalid authorization"
 *  }
 * 
 * @apiErrorExample {json} BadRequest Error:
 *  HTTP/1.1 401 Bad Request
 *  {
 *     "type": "https://example.net/validation-error",
 *     "title": "Your request parameters didn't validate.",
 *     "invalid-params": [
 *       {
 *         "name": "age",
 *         "reason": "must be a positive integer"
 *       },
 *       {
 *         "name": "color",
 *         "reason": "must be 'green', 'red' or 'blue'"
 *       }
 *     ]
 *  }
 */
