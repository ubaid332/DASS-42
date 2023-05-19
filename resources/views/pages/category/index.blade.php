@extends('partial.master')
@section('content')

<x-bread-crumb-component :modal=true modalType="Category" modalId="add_category" />  
<x-modal-add-category-component />
<x-table-component/>

@endsection

@push('extended-js')
<script src="{{ asset('assets/core/category/main.js') }}"></script>
<script src="{{ asset('assets/core/category/table.js') }}"></script>

@endpush