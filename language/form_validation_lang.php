<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= '{field} harap diisi.';
$lang['form_validation_isset']			= '{field} harap ditandai.';
$lang['form_validation_valid_email']	= '{field} mohon memasukkan email yang benar dan masih berlaku.';
$lang['form_validation_valid_emails']	= 'Seluruh {field} email harus benar dan masih berlaku.';
$lang['form_validation_valid_url']		= '{field} harus mengandung URL yang tepat.';
$lang['form_validation_valid_ip']		= '{field} harus mengandung sebuah IP yang benar.';
$lang['form_validation_min_length']		= '{field} harus mengandung paling sedikit {param} karakter.';
$lang['form_validation_max_length']		= '{field} tidak boleh melebihi {param} karakter.';
$lang['form_validation_exact_length']	= '{field} harus mengandung tepat {param} karakter.';
$lang['form_validation_alpha']			= '{field} hanya dapat diisi dengan karakter abjad.';
$lang['form_validation_alpha_numeric']	= '{field} hanya dapat diisi dengan karakter alfanumerik.';
$lang['form_validation_alpha_numeric_spaces']	= '{field} hanya dapat diisi dengan karakter alfanumerik dan spasi.';
$lang['form_validation_alpha_dash']		= '{field} hanya dapat diisi dengan karakter alfanumerik, garis bawah, dan tanda hubung.';
$lang['form_validation_numeric']		= '{field} hanya dapat diisi dengan angka.';
$lang['form_validation_is_numeric']		= '{field} hanya dapat diisi dengan karakter numerik.';
$lang['form_validation_integer']		= '{field} harus mengandung sebuah bilangan bulat.';
$lang['form_validation_regex_match']	= '{field} tidak dalam format yang benar.';
$lang['form_validation_matches']		= '{field} tidak sesuai dengan kolom {param}.';
$lang['form_validation_differs']		= '{field} harus berlainan dengan kolom {param}.';
$lang['form_validation_is_unique'] 		= '{field} harus berisi satu nilai khusus.';
$lang['form_validation_is_natural']		= '{field} hanya dapat diisi dengan digit.';
$lang['form_validation_is_natural_no_zero']	= '{field} hanya dapat diisi dengan angka dan harus lebih besar dari nol.';
$lang['form_validation_decimal']		= '{field} harus mengandung satu bilangan desimal.';
$lang['form_validation_less_than']		= '{field} harus mengandung satu bilangan kurang dari {param}.';
$lang['form_validation_less_than_equal_to']	= '{field} harus mengandung sebuah bilangan kurang dari atau sama dengan {param}.';
$lang['form_validation_greater_than']	= '{field} harus mengandung sebuah bilangan lebih besar dari {param}.';
$lang['form_validation_greater_than_equal_to']	= '{field} harus mengandung sebuah bilangan lebih besar dari atau sama dengan {param}.';
$lang['form_validation_error_message_not_set']	= 'Tidak dapat mengakses pemberitahuan kesalahan yang sesuai dengan nama kolom {field}.';
$lang['form_validation_in_list']		= '{field} harus tergolong salah satu dari: {param}.';
