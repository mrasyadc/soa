@extends('layouts.app')
@section('title', 'Thesis Revision')

@section('content')
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">

        <div class="border-t border-gray-200">

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Color
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Microsoft Surface Pro
                        </th>
                        <td class="py-4 px-6">
                            White
                        </td>
                        <td class="py-4 px-6">
                            Laptop PC
                        </td>
                        <td class="py-4 px-6">
                            $1999
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Magic Mouse 2
                        </th>
                        <td class="py-4 px-6">
                            Black
                        </td>
                        <td class="py-4 px-6">
                            Accessories
                        </td>
                        <td class="py-4 px-6">
                            $99
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
