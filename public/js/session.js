

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
    ]
  },
  methods: {
    sendMessage: function () {
        var msg = {name:this.username,msg:this.newMessage};
        send(msg);
    }
  }
});

var conn = new WebSocket('ws://localhost:8080/chat');
conn.onopen = function(e) {
    console.log('socket connect',e)
};

var send = function (msg) {
    console.log(JSON.stringify(msg))
    conn.send(JSON.stringify(msg));
    session.newMessage='';
};

conn.onmessage = function(e) {

    console.log(JSON.parse(e.data));

    session.items.push(JSON.parse(e.data));

};
