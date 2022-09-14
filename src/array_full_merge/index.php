<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sammy\Packs\ArrayFullMerge
 * - Autoload, application dependencies
 *
 * MIT License
 *
 * Copyright (c) 2020 Ysare
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
use Sammy\Packs\ArrayFullMerge;
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: array_full_merge
 * @Function Description: Function Description
 * @Function Args: ...$arrayList
 */
if (!function_exists ('array_full_merge')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author  AuthorName
 * @keywords Function Keywords
 */
function array_full_merge (/* Function Arguments */) {
  //Function Body
  return forward_static_call_array (
    [ArrayFullMerge::class, 'ArrayFullMerge'],
    func_get_args ()
  );
}}
