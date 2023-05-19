@push('extended-css')
   <style>
    table thead{
        background-color: #555 !important;
        color: #fff !important;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border-bottom: 1px solid #ccc !important;
        padding: 8px;
    }
    .btn{
        margin-right: 10px !important
    }
   </style>
@endpush
<div class="row">
    <div class="col-sm-12">
        <div class="card mb-0 mt-5">
            <div class="table-responsive p-3">
                <table class="table table-bordered data-table " id="table">
                    
                </table>
            </div>
        </div>
    </div>
</div>