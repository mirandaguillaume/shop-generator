var channel = socket.subscribe('my-test-channel');

channel.bind('my-event', function(data) {
    alert('An event was triggered with message: ' + data.message);
});