@extends('layouts.admin.index')
@section('content')
  <div class="d-flex align-items-center mb-1 flex-wrap">
    <h4 class="fs-20 font-w600 me-auto">Dosen</h4>
    <div>
    <a href="javascript:void(0);" class="btn btn-primary me-3 btn-sm apply-job"><i class="fas fa-plus me-12"></i>Add
      Dosen</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-sm mb-0 table-striped">
      <thead>
        <tr>
        <th class=" pe-3">
          <div class="form-check custom-checkbox mx-2">
          <input type="checkbox" class="form-check-input" id="checkAll">
          <label class="form-check-label" for="checkAll"></label>
          </div>
        </th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th class=" ps-5" style="min-width: 200px;">Billing Address
        </th>
        <th>Joined</th>
        <th></th>
        </tr>
      </thead>
      <tbody id="customers">
        <tr class="btn-reveal-trigger">
        <td class="py-2">
          <div class="form-check custom-checkbox mx-2">
          <input type="checkbox" class="form-check-input" id="checkbox1">
          <label class="form-check-label" for="checkbox1"></label>
          </div>
        </td>
        <td class="py-3">
          <a href="#">
          <div class="media d-flex align-items-center">
            <div class="avatar avatar-xl me-2">
            <div class=""><img class="rounded-circle img-fluid" src="./images/avatar/5.png" width="30" alt="" />
            </div>
            </div>
            <div class="media-body">
            <h5 class="mb-0 fs--1">Ricky Antony</h5>
            </div>
          </div>
          </a>
        </td>
        <td class="py-2"><a href="mailto:ricky@example.com">info@example.com</a></td>
        <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
        <td class="py-2 ps-5">2392 Main Avenue, Penasauka</td>
        <td class="py-2">30/03/2018</td>
        <td class="py-2 text-end">
          <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button"
            data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24"
              version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24"></rect>
              <circle fill="#000000" cx="5" cy="12" r="2"></circle>
              <circle fill="#000000" cx="12" cy="12" r="2"></circle>
              <circle fill="#000000" cx="19" cy="12" r="2"></circle>
              </g>
            </svg></span></button>
          <div class="dropdown-menu dropdown-menu-end border py-0">
            <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger"
              href="#!">Delete</a></div>
          </div>
          </div>
        </td>
        </tr>  
      </tbody>
      </table>
    </div>
    </div>
  </div>
  @include('layouts.admin.modalDosen')
@endsection