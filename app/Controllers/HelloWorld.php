<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index()
    {
        return view('halloworld');
    }

    public function halodunia()
    {
        return view('halloworld');
    }
    
    public function form()
    {
        return "
         <form action='/kirim' method='POST'>
        <table>
            <tr>
                <td><label for='nama'>Nama</label></td>
                <td><label for='nama'>:</label></td>
                <td><input type='text' id='nama' name='nama'></td>
            </tr>
            <tr>
                <td><label for='nim'>Nim</label></td>
                <td><label for='nim'>:</label></td>
                <td><input type='text' id='nim' name='nim'></td>
            </tr>
            <tr>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form>
        ";
    }

    public function kirim()
    {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];

        return "
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>$nama</td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td>$nim</td>
                </tr>
            </table>
        ";
    }
}
