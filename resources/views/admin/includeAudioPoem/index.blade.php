

<div class="relative w-full h-full mt-2 overflow-y-auto shadow-md custom-scrollbar sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th class="px-6 py-4">
                    id
                </th>
                <th scope="col" class="px-6 py-4">
                    @lang('nav.audio_poems')
                </th>
                <th scope="col" class="px-6 py-4">
                    @lang('nav.name_of_poems')
                </th>
                <th scope="col" class="px-6 py-4">
                    {{__('nav.status')}}
                </th>
                <th scope="col" class="px-6 py-4">
                    @lang('nav.order')
                </th>
                <th scope="col" class="px-6 py-4">
                    {{__('nav.actions')}}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($audios as $audio)
            <tr class="bg-white border-b hover:bg-gray-50 ">
                <td class="px-6 py-4">
                    {{ $audio->id }}
                </td>
                <td  class="px-6 py-4 ">
                    <div data-audio-src="{{ $audio->getAudio() }}" class="p-1 text-white rounded-lg shadow-lg audio-player" >
                        <div class="flex flex-row items-center justify-between pl-1">
                                <div style="background-image:url({{asset('images/G_Ezizow3.jpeg')}})" class="flex items-center justify-center p-3 text-gray-800 bg-cover rounded-sm playPauseBtn hover:bg-green-600 focus:outline-none">
                                    <i class='playIcon bx bx-play-circle text-[28px] opacity-60'></i>
                                    <i class='pauseIcon hidden bx bx-pause text-[28px]'></i>
                                </div>
                            <div class="items-start flex-1 pl-4">
                                <p class="text-sm text-gray-400 text-nowrap">{{ $audio['name_'.app()->getLocale()] }}</p>
                                <div class="relative text-gray-400">
                                    <input type="range" min="0" max="100" value="0" class="w-full h-2 bg-gray-400 rounded-lg appearance-none cursor-pointer progressBar">
                                    <span class="currentTime">00:00</span> / <span class="duration">00:00</span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    {{$audio["name_".app()->getLocale()]}}
                </td>
                <td class="px-6 py-4">
                    <form action="{{ route('audioPoem.active', ['audioPoem' => $audio->id])}}" 
                        method="post">
                        @csrf
                        @method('PUT')
                        <label class="relative inline-flex items-center cursor-pointer ">
                            <input type="checkbox" name="status" @if($audio->status) checked @endif class="sr-only peer">
                            <div class="relative w-11 h-6 bg-red-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <button type="submit" class="w-[45px] h-[25px] absolute top-0"></button>{{-- image activate and disactivate button --}}
                        </label>
                    </form>
                </td>

                <td class="px-6 py-4">
                    {{ $audio->order }}
                </td>
                
                <td class="px-6 py-3">
                    <div class="flex flex-row gap-1">
                        <a href="{{route('audioPoem.edit',['audioPoem' => $audio->id])}}">
                            <div>
                                <button type="submit" class="flex p-2.5 rounded-xl transition-all duration-300">
                                    <i class='bx bx-edit text-[24px]'></i>
                                </button>
                            </div>
                        </a>
                        <div>
                            @if(auth()->user()->is_admin == 1)
                                <form action="{{ route('audioPoem.delete', ['audioPoem' => $audio->id])}}" 
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="flex p-2.5 rounded-xl transition-all duration-300 text-red-600">
                                        <i class='text-[24px] bx bx-trash'></i>
                                    </button>
                                </form>
                            @endif
                        </div> 
                    </div>
                                       
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>


<script>
    const audioPlayers = [];  // Array to keep track of all audio elements

    document.querySelectorAll('.audio-player').forEach(player => {
        const audio = new Audio(player.dataset.audioSrc);
        audioPlayers.push(audio);  // Add each audio element to the array
        const playPauseBtn = player.querySelector('.playPauseBtn');
        const playIcon = player.querySelector('.playIcon');
        const pauseIcon = player.querySelector('.pauseIcon');
        const progressBar = player.querySelector('.progressBar');
        const currentTimeEl = player.querySelector('.currentTime');
        const durationEl = player.querySelector('.duration');


        audio.addEventListener('loadedmetadata', () => {
            durationEl.textContent = formatTime(audio.duration);
            progressBar.max = audio.duration;
        });

        audio.addEventListener('timeupdate', () => {
            const currentTime = audio.currentTime;
            const progress = (currentTime / audio.duration) * 100;
            progressBar.value = progress;
            currentTimeEl.textContent = formatTime(currentTime);
        });

        progressBar.addEventListener('input', () => {
            audio.currentTime = progressBar.value;
        });

        playPauseBtn.addEventListener('click', () => {
            if (audio.paused) {
                // Pause all other audios before playing the new one
                audioPlayers.forEach(otherAudio => {
                    if (otherAudio !== audio) {
                        otherAudio.pause();
                        // Update the icons for all other players to show the play button
                        const otherPlayer = document.querySelector(`.audio-player[data-audio-src="${otherAudio.src}"]`);
                        if (otherPlayer) {
                            otherPlayer.querySelector('.playIcon').classList.remove('hidden');
                            otherPlayer.querySelector('.pauseIcon').classList.add('hidden');
                        }
                    }
                });
                audio.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            } else {
                audio.pause();
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }
        });
        function formatTime(time) {
            const minutes = Math.floor(time / 60);
            const seconds = Math.floor(time % 60);
            return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }
    });
</script>