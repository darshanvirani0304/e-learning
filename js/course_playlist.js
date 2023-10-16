let playVideo = document.querySelector(".play-video-start");
let heading = document.querySelector(".main-heading");
let detail = document.querySelector(".detail");
let playlist = document.querySelector(".course-playlist");
let video_heading = document.querySelector(".video-heading");

fetch("../js/course-playlist.json").then((response) => {
    return response.json();
}).then((data) => {
    data.forEach((video, i) => {
        let videoPlaylist = `
            <div class="playlist" data-id="${video.id}">
                <div class="play-pause-box">
                    <i class="ri-play-fill"></i>
                </div>
                <div class="course-description">
                    <p class="video-heading">${i + 1}. ${video.title}</p>
                    <p class="time">${video.duration}</p>
                </div>
            </div>
        `;
        playlist.innerHTML += videoPlaylist;

    })

    let videoElement = document.querySelectorAll(".playlist");

    videoElement[0].classList.add("active")
    videoElement[0].querySelector(".play-pause-box").innerHTML = "<i class='ri-pause-line'></i>";

    videoElement.forEach((selectVideo) =>{
        selectVideo.onclick = () =>{
            for(select of videoElement){
                select.classList.remove("active");
                select.querySelector(".play-pause-box").innerHTML = "<i class='ri-play-fill'></i>";
            }

            selectVideo.classList.add("active");
            selectVideo.querySelector(".play-pause-box").innerHTML = "<i class='ri-pause-line'></i>";

            let matchVideo = data.find(video => video.id == selectVideo.dataset.id);
            playVideo.src = matchVideo.name;
            heading.innerHTML = matchVideo.title; 
            detail.innerHTML = matchVideo.detail; 

        }
    })

});


