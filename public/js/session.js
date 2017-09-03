

Vue.component('chat-item', {
  template: '\
    <div class="direct-chat-msg">\
      <div class="direct-chat-info clearfix">\
        <span class="direct-chat-name pull-left">{{ name }}</span>\
        <span class="direct-chat-timestamp pull-right">{{ time }}</span>\
      </div>\
      <!-- /.direct-chat-info -->\
      <img class="direct-chat-img" src="adminlte/dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->\
      <div class="direct-chat-text">\
        {{ message }}\
      </div>\
      <!-- /.direct-chat-text -->\
    </div>\
  ',
  props: ['name','time','message']
});

var session = new Vue({
  el: '#session-list',
  data: {
    username:'IronMan',
    newMessage: '',
    items: [
        // {name:this.username,time:'10:10',msg:'hello',"isRight":true},
        // {name:this.username,time:'10:12',msg:'你好',"isRight":true}
    ]
  },
  methods: {
    sendMessage: function () {
      // this.isRight = true;
        var msg = {name:this.username,msg:this.newMessage};
        send(msg);
        // this.items.push(msg);
    }
  }
  // created: function () {
  //   $.post('sessionStart','',function(user){
  //     session.username = user.name
  //   })
  //   setInterval(function(){call()}, 3000)
  // }
});

var conn = new WebSocket('ws://localhost:8080/chat');
conn.onopen = function(e) {
    // conn.send('Hello Me!');
};

conn.onmessage = function(e) {

    console.log(JSON.parse(e.data));

    session.items.push(JSON.parse(e.data));

};

var send = function (msg) {
    console.log(JSON.stringify(msg))
    conn.send(JSON.stringify(msg));
    session.newMessage='';
};

// window.setInterval(function(){call()},5000);

// document.onkeydown=function(event){
//     var e = event || window.event || arguments.callee.caller.arguments[0];
//     if(e && e.keyCode==27){ // 按 Esc
         
//       }
//      if(e && e.keyCode==13){ // enter 键
//         send()
//     }
// };
//
// var call = function()
// {
//   $.ajax({
//     url:'session',
//     type:'post',
//     data:{call:'1'},
//     dataType:'json',
//     success:function(data){
//       if (data) {
//         $.each(JSON.parse(data),function(index ,value){
//           var talk = value.session
//           session.isRight = false
//           session.todos.push({name:session.username,time:'12:13',talk:talk,right:''})
//           $.ajax({
//             url:'session',
//             type:'post',
//             data:{call:'2',data:data},
//           })
//         })
//       }
//     }
//   })
// }
//
// var send = function(){
//     var talk = $('input[name=message]').val()
//     $.ajax({
//       url:'session',
//       type:'post',
//       data:{talk:talk}
//     })
//     $('input[name=message]').val('')
// }
