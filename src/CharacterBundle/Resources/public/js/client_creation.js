var channel = socket.subscribe('test_channel');
channel.bind('my_event', function(data) {
    alert(data.message);
});
