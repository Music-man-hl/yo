@extends('layouts.app')

          @section('content')
            <div class="col-md-6">
              <!-- DIRECT CHAT -->
              <div id="session-list" class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>

                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                      <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div is="chat-item" v-for="item in items"
                         v-bind:class="{ right:item.isRight }"
                         v-bind:name="username"
                         v-bind:time="item.time"
                         v-bind:message="item.msg"
                    >

                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    {{--<div class="direct-chat-msg right">--}}
                      {{--<div class="direct-chat-info clearfix">--}}
                        {{--<span class="direct-chat-name pull-right">Sarah Bullock</span>--}}
                        {{--<span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>--}}
                      {{--</div>--}}
                      {{--<!-- /.direct-chat-info -->--}}
                      {{--<img class="direct-chat-img" src="/adminlte/dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->--}}
                      {{--<div class="direct-chat-text">--}}
                        {{--You better believe it!--}}
                      {{--</div>--}}
                      {{--<!-- /.direct-chat-text -->--}}
                    {{--</div>--}}
                    <!-- /.direct-chat-msg -->
                  </div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="/adminlte/dist/img/user1-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="input-group">
                      <input id="message" type="text" name="message" placeholder="Type Message ..." class="form-control"
                            v-model="newMessage">
                      <span class="input-group-btn">
                            <button id="send" type="button" class="btn btn-warning btn-flat"
                                    v-on:click="sendMessage">Send</button>
                          </span>
                    </div>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->
@endsection
@section('js')
  <script src="{{ asset('js/session.js') }}"></script>
  <script>

  </script>

@endsection
