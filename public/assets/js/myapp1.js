var apiObj = null;

function StartMeeting(meeting,name){
    const domain = 'meet.jit.si';
    const options = {
        roomName: meeting,
        width: 900,
        height: 600,
        parentNode: document.querySelector('#jitsi-meet-conf-container'),
        userInfo: {
        email: 'email@jitsiexamplemail.com',
        displayName:name,

    }
    };
    apiObj = new JitsiMeetExternalAPI(domain, options);
}
