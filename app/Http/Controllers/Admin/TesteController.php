<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function dashboard() {
        return 'Teste Dashboard !';
    }
    public function finantical() {
        return 'Teste Finantical !';
    }
    public function products() {
        return 'Teste Products !';
    }
    public function teste() {
        return 'Teste Teste !';
    }
}
