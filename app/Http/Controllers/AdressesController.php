<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Adresses;

/**
 * Класс для работы с моделью адрессов
 * Class AdressesController
 * @package App\Http\Controllers
 */
class AdressesController extends Controller
{

    /**
     * Функция для внесения и сохранения данных из формы в таблицу адресов
     * submit function
     * @param Request $request
     * @return view 'home'
     */


    public function submit(Request $request){
        $adress = new Adresses();
        $adress->NAME = $request->input('name');
        $adress->CITY = $request->input('city');
        $adress->AREA = $request->input('area');
        $adress->STREET = $request->input('street');
        $adress->HOUSE = $request->input('house');
        $adress->INFORMATION= $request->input('additional_information');
        $adress->save();
        return redirect()->route('home');
    }

    /**
     * Функция для возвращения данных из модели адрессов с сортировкой по убыванию по столбцу имени
     * allData function
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function allData(){
        $address = new Adresses();
        return view('user_office_address', ['address' => $address->orderBy('NAME','ASC')->get()]);
    }
}
