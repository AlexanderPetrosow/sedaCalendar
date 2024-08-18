<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Audio Players</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="flex flex-col items-center justify-center h-screen space-y-4 bg-gray-900">

    <div class="w-full p-1 text-white bg-gray-800 rounded-lg shadow-lg">
        <div class="flex flex-row items-center justify-between pl-1">
                <div id="playPauseBtn" style="background-image:url({{asset('images/G_Ezizow3.jpeg')}})" class="flex items-center justify-center p-3 text-white bg-cover rounded-sm hover:bg-green-600 focus:outline-none">
                    <i id="playIcon" class='bx bx-play-circle text-[28px] opacity-60'></i>
                    <i id="pauseIcon" class='hidden bx bx-pause text-[28px]'></i>
                </div>
            <div class="items-start flex-1 pl-4">
                <p class="text-sm text-gray-400">Song Title - Artist</p>
                <div class="relative">
                    <input id="progressBar" type="range" min="0" max="100" value="0" class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer">
                    <span id="current-time">00:00</span> / <span id="duration">00:00</span> 
                </div>
            </div>
        </div>
        <audio id="audioPlayer" src="{{asset('files/audio.mp3')}}"></audio>
    </div>

    <!-- Add more audio players similarly by duplicating the above div -->

<script>
    
    const audioPlayer = document.getElementById('audioPlayer');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const playIcon = document.getElementById('playIcon');
    const pauseIcon = document.getElementById('pauseIcon');
    const progressBar = document.getElementById('progressBar');
    const currentTimeEl = document.getElementById('current-time');
    const durationEl = document.getElementById('duration');

    function formatTime(time) {
        const minutes = Math.floor(time / 60);
        const seconds = Math.floor(time % 60);
        return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    }

    audioPlayer.addEventListener('loadedmetadata', () => {
        durationEl.textContent = formatTime(audioPlayer.duration);
        progressBar.max = audioPlayer.duration;
    });

    playPauseBtn.addEventListener('click', () => {
        if (audioPlayer.paused) {
            audioPlayer.play();
            playIcon.classList.add('hidden');
            pauseIcon.classList.remove('hidden');
        } else {
            audioPlayer.pause();
            playIcon.classList.remove('hidden');
            pauseIcon.classList.add('hidden');
        }
    });

    audioPlayer.addEventListener('timeupdate', () => {
        const currentTime = audioPlayer.currentTime;
        const duration = audioPlayer.duration;
        const progress = (currentTime / duration) * 100;
        progressBar.value = progress;
        currentTimeEl.textContent = formatTime(currentTime);
    });

    progressBar.addEventListener('input', () => {
        const seekTime = (progressBar.value / 100) * audioPlayer.duration;
        audioPlayer.currentTime = seekTime;
    });
</script>

</body>
</html>
