@extends('layouts.app')

@section('content')

<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">List Contact</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page">List Contact</li>
            </ol>
          </nav>
        </div>
        <div class="col-3">
          <div class="text-center mb-n5">
            <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
        <div class="col-12">
            <div class="d-flex w-100">
                <div class="min-width-340">
                  <div class="border-end user-chat-box h-100">
                    <div class="px-4 pt-9 pb-6 d-none d-lg-block">
                      <form class="position-relative">
                        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search">
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                      </form>
                    </div>
                    <div class="app-chat">
                      <ul class="chat-users" style="height: calc(100vh - 400px)" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                        @forelse ( $contacts as $contact )
                        <li class="ml-3" id="contact-{{$contact->user_id}}" onclick="handleDetailContact('{{$contact->user->id}}')">
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user bg-light" id="chat_user_1" data-user-id="1">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-4.jpg" alt="user-4" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">{{$contact->user->name}}</h6>
                              <span class="fs-2 text-body-color d-block">{{$contact->user->email}}</span>
                            </div>
                          </a>
                        </li>
                        @empty
                        <li class="px-4">
                            <div class="p-2 rounded bg-light-primary text-primary">
                                Tidak memiliki contact
                            </div>
                        </li>
                        @endforelse
                      </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 720px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 235px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
                    </div>
                  </div>
                </div>
                <div class="w-100">
                  <div class="chat-container h-100 w-100">
                    <div class="chat-box-inner-part h-100">
                      <div class="chatting-box app-email-chatting-box">
                        <div class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between chat-active">
                          <h5 class="text-dark mb-0 fw-semibold">Contact Details</h5>
                          <ul class="list-unstyled mb-0 d-flex align-items-center">
                            <li class="d-lg-none d-block">
                              <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <span class="bg-primary py-1 px-2 rounded text-white">
                                    kembali
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="position-relative overflow-hidden">
                          <div class="position-relative">
                            <div id="chat-box" class="chat-box p-9" style="height: calc(100vh - 428px)" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -20px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 20px;">
                              <div class="chat-list chat active-chat" data-user-id="1">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-4.jpg" alt="user4" width="72" height="72" class="rounded-circle">
                                    <div>
                                      <h6 id="name" class="fw-semibold fs-4 mb-0"></h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 id="noTelp" class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 id="email" class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button onclick="" class="btn-chat btn btn-success w-85">Chat</button>
                                    <button onclick="handleDeleteContact()" class="btn-delete btn btn-danger w-85">Delete Contact</button>
                                </div>
                              </div>
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 620px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 237px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <form id="deleteContact" method="post">
        @csrf
        @method("DELETE")
    </form>

    <div id="primary-header-modal" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-colored-header bg-primary text-white">
            <h4 class="modal-title" id="primary-header-modalLabel">
              Modal Heading
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5 class="mt-0">Primary Background</h5>
            <p>
              Cras mattis consectetur purus sit amet
              fermentum. Cras justo odio, dapibus ac facilisis
              in, egestas eget quam. Morbi leo risus, porta ac
              consectetur ac, vestibulum at eros.
            </p>
            <p>
              Praesent commodo cursus magna, vel scelerisque
              nisl consectetur et. Vivamus sagittis lacus vel
              augue laoreet rutrum faucibus dolor auctor.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-light-primary text-primary font-medium">
              Save changes
            </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

@endsection

@section('script')
<script src="{{ asset('assets/dist/js/apps/chat.js')}}"></script>
    <script>
        const id = "{{$contacts[0]->user->id ?? 0}}"
        // console.log(id)
        if(id > 0 ){
            handleDetailContact(id)

        }else{
            $("#chat-box").addClass("d-none")
            $("#name").text("username")
            $("#noTelp").text("tesss")
            $("#email").text("teseses")
            $("#deleteContact").attr("data-user_id",id);
        }

        function handleDetailContact(id){
            axios.get("/data-detail-user/"+id)
            .then((res)=>{
                const user = res.data;
                $("#name").text(user.name);
                $("#noTelp").text(user.no_telp.noTelp);
                $("#email").text(user.email);
                $("#deleteContact").attr("data-user_id",id);

            })
            .catch((err)=>{
                toastr.error(err)
            })
        }

        $("#deleteContact").submit(function(e){
            e.preventDefault()
            const user_id = $(this).attr('data-user_id')
            location.reload()
            axios.delete("/delete-contact/"+user_id)
            .then((res)=>{
                toastr.success("Berhasil Menghapus tugas")
                $("#contact-"+id).empty()
            })
            .catch((err)=>{
                toastr.error("Gagal Menghapus tugas")
                console.log(err)
            })
        })

        function handleDeleteContact(){
            $("#deleteContact").trigger("submit")
        }


    </script>

@endsection
