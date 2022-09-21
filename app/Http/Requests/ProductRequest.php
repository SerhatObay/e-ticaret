<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:2:max:20',
            'description'=>'required|min:2:max:1000',
            'features'=>'required|min:2:max:255',
            'price'=>'required|',

            'image'=>'mimes:jpeg,png,jpg|max:2048',
            'category'=>'required|',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Başlık Boş Bırakılamaz',
            'name.min'=>'Başlık En Az 2 Karakterden Oluşmalıdır',
            'name.max'=>'Başlık En Fazla 20 Karakterden Oluşmalıdır',
            'image.mimes'=>'Resimler .png .jpg .jpeg Olmalıdır',
            'image.max'=>'Seçtiğiniz Resim 2Mb den Fazladır',
            'description.required'=>'Açıklama Yazısı Boş Bırakılamaz',
            'description.min'=>'Açıklama Yazısı 2 Karakterden Az Olamaz',
            'description.max'=>'Açıklama Yazısı 1000 Karakterden Fazla Olamaz',
            'features.required'=>'Açıklama Yazısı Boş Bırakılamaz',
            'features.min'=>'Açıklama Yazısı 2 Karakterden Az Olamaz',
            'features.max'=>'Açıklama Yazısı 1000 Karakterden Fazla Olamaz',
            'price.required'=>'Başlık Boş Bırakılamaz',

            'category.required'=>'Başlık Boş Bırakılamaz',
        ];
    }
}
