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
                              <img src="{{ $contact->user->fotoProfil ? asset('storage/' . $contact->user->fotoProfil) : asset('default.jpg') }}" alt="user-4" width="40" height="40" class="rounded-circle">
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
                            <div id="chat-box" class="chat-box p-9" style="height: calc(100vh - 300px)" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -20px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 20px;">
                              <div class="chat-list chat active-chat" data-user-id="1">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img id="previewDetailContact" src="" alt="user4" width="72" height="72" class="rounded-circle">
                                    <div>
                                      <h6 id="nameDetail" class="fw-semibold fs-4 mb-0"></h6>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 id="noTelpDetail" class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 id="emailDetail" class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button onclick="handleChat()" data-bs-toggle="modal" data-bs-target="#modalChat" class="btn-chat btn btn-success w-85">Chat</button>
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

    <div id="modalChat" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-colored-header bg-primary text-white">
           <div>
                <img style="object-fit: cover" id="foto_penerima" width="60" height="60" class="rounded-circle">
                <span style="
                font-size: 20px;
                margin-left: 10px;
            " class="fw-bold text-white" id="nama_penerima"></span>
           </div>
           <button class="ms-2 btn btn-warning btn-refresh">Refresh</button>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="simplebar-content" style="padding: 20px;">

                <div id="chatList" class="chat-list chat active" data-user-id="2">

                </div>

              </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
                <div class="col-8 col-md-10">
                    <input type="text" id="message" name="message" placeholder="Your message" class="form-control">
                </div>
                <div class="col-2">
                    <button id="btn-chat" class="btn-send btn btn-primary rounded">Send</button>
                </div>
            </div>
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
            $("#nameDetail").text("username")
            $("#noTelpDetail").text("tesss")
            $("#emailDetail").text("teseses")
            $("#deleteContact").attr("data-user_id",id);
        }

        function handleDetailContact(id){
            axios.get("/data-detail-user/"+id)
            .then((res)=>{
                const user = res.data;
                console.log(user.fotoProfil)
                $("#previewDetailContact").attr("src", user.fotoProfil ? `{{ asset('storage/${user.fotoProfil}') }}` : "{{asset('default.jpg')}}" ).css("object-fit",'cover');
                $("#nameDetail").text(user.name);
                $("#noTelpDetail").text(user.no_telp.noTelp);
                $("#emailDetail").text(user.email);
                $("#deleteContact").attr("data-user_id",id);

                $("#foto_penerima").attr("src", user.fotoProfil ? `{{ asset('storage/${user.fotoProfil}') }}` : "{{asset('default.jpg')}}" );
                $("#nama_penerima").text(user.name);
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

        function getTimeAgo(timestamp) {
    const currentTimestamp = Date.now();
    const timeDiffInSeconds = Math.floor((currentTimestamp - timestamp) / 1000);

    if (timeDiffInSeconds < 60) {
        return `${timeDiffInSeconds} seconds ago`;
    } else if (timeDiffInSeconds < 3600) {
        const minutes = Math.floor(timeDiffInSeconds / 60);
        return `${minutes} minutes ago`;
    } else if (timeDiffInSeconds < 86400) {
        const hours = Math.floor(timeDiffInSeconds / 3600);
        return `${hours} hours ago`;
    } else {
        const days = Math.floor(timeDiffInSeconds / 86400);
        return `${days} days ago`;
    }
}

        function getMessage(id_penerima){
            axios.get("data-message/"+id_penerima)
            .then((res)=>{
                const message = res.data.message;
                $("#chatList").empty()
                $.each(message,(index,data)=>{
                    const timestamp = Date.parse(data.created_at);
                    if(data.id_penerima == id_penerima){

                        const chatPengirim =`
                        <div class="hstack gap-3 align-items-start mb-7 justify-content-end">
                            <div class="text-end">
                                <div class="option-pengirim d-flex gap-2 align-items-center">
                                    <h6 class="fs-2 text-muted">${getTimeAgo(timestamp)}</h6>
                                    <button onclick="handleEditMessage('${data.id}','${data.message}',${data.penerima_id})" class="p-0 cursor-pointer border-0 bg-transparent">
                                        <i class="ti ti-pencil" ></i>
                                    </button>
                                    <button onclick="handleDeleteMessage('${data.id}','${data.id_penerima}')" class="p-0 cursor-pointer border-0 bg-transparent">
                                        <i class="ti ti-trash" ></i>
                                    </button>
                                </div>
                            <div class="p-2 bg-light-info text-dark rounded-1 d-inline-block fs-3">${data.message}</div>
                            </div>
                        </div>
                        `
                        $("#chatList").append(chatPengirim)

                    }else{
                        console.log(message);
                        const user = res.data.penerima;
                        const pp = user.fotoProfil ? `{{ asset('storage/${user.fotoProfil}') }}` : "{{asset('default.jpg')}}" ;
                        // const pp = data.user.fotoProfile ? `{{ asset('storage/${data.user.fotoProfile}') }}` : "{{asset('default.jpg')}}"
                        const chatPenerima = `
                        <div class="hstack gap-3 align-items-start mb-7 justify-content-start">
                            <img src="${pp}" alt="user8" width="40" height="40" class="rounded-circle">
                            <div>
                            <h6 class="fs-2 text-muted">${user.name}, ${getTimeAgo(timestamp)}</h6>
                            <div class="p-2 bg-light rounded-1 d-inline-block text-dark fs-3">${data.message}</div>
                            </div>
                        </div>
                        `
                        $("#chatList").append(chatPenerima)
                    }
                })






            })
            .catch((err)=>{
                toastr.error(err.response.data.message)
            })
        }

        function handleChat(){
            const penerima_id = $("#deleteContact").attr('data-user_id');
            getMessage(penerima_id)
        }


        $(".btn-send").click(function(){
            const penerima_id = $("#deleteContact").attr('data-user_id');
            const message = $("#message").val()
            const id = $(this).attr('data-chat_id') ?? 0;

            axios.post("/send-message",{id,penerima_id,message})
            .then((res)=>{
                $("#message").val(null)
                getMessage(penerima_id)
                toastr.success(res.data.message)
               $(this).removeAttr('data-chat_id');
            })
            .catch((err)=>{
                 $(this).removeAttr('data-chat_id');
                toastr.error(err.response.data.message)
            })
        })

        function handleDeleteMessage(id,id_penerima){
            axios.delete("delete-message/"+id)
            .then(res=>{
                toastr.success(res.data.message)
                getMessage(id_penerima)
            })
            .catch(err=>{
                toastr.error(err.response.data.message)
            })
        }


        function handleEditMessage(id,message,penerima_id)
        {
            $("#message").val(message)
            $(".option-pengirim").empty();
            $("#btn-chat").removeClass('btn-send')
            $("#btn-chat").addClass('btn-edit-send')
            $("#btn-chat").attr('data-chat_id',id)
        }


        $(".btn-refresh").click(function(){
            const penerima_id = $("#deleteContact").attr('data-user_id');
             getMessage(penerima_id)
        })


        function handleDeleteContact(){
            $("#deleteContact").trigger("submit")
        }


    </script>

@endsection
