<section class="h-[3%] w-screen flex flex-row text-center items-center align-center justify-between text-white">
    <div class="pl-1">
        <p id="time" class="text-xs">15:39</p>
    </div>

    <div class="px-1 flex flex-row items-center gap-1">
        <img class="w-3 h-3" src="https://img.icons8.com/?size=100&id=117817&format=png&color=FFFFFF" alt="" srcset="">
        <img class="w-3 h-3" src="https://img.icons8.com/?size=100&id=97830&format=png&color=FFFFFF" alt="" srcset="">
        <img class="w-3 h-3" src="https://img.icons8.com/?size=100&id=35vJT92zyy7h&format=png&color=FFFFFF" alt="" srcset="">
        <p id="battery-level" class="text-xs ml-2">80%</p>
        <img id="battery-icon" class="w-3 h-3" src="https://img.icons8.com/?size=100&id=96227&format=png&color=FFFFFF" alt="" srcset="">
    </div>
</section>

<script>
    updateTime();
    setInterval(updateTime, 1000);

    function updateTime() {
        const date = new Date();
        var currentTime = "";

        // Hour
        if (date.getHours() == 0)
            currentTime += "00";
        else if (date.getHours() < 10)
            currentTime += "0" + date.getHours();
        else
            currentTime += date.getHours();

        // Minutes
        if (date.getMinutes() == 0)
            currentTime += ":00";
        else if (date.getMinutes() < 10)
            currentTime += ":0" + date.getMinutes();
        else
            currentTime += ":" + date.getMinutes();

        console.log(currentTime);
        document.getElementById("time").innerText = currentTime;
    }

    navigator.getBattery().then(function(battery) {
        battery.addEventListener('levelchange', function() {
            updateBatteryIcon(battery);
        });

        updateBatteryIcon(battery);
    });

    function updateBatteryIcon(battery) {


        if (battery.level * 100 <= 25)
            document.getElementById("battery-icon").src = 'https://img.icons8.com/?size=100&id=96273&format=png&color=FFFFFF';
        else if (battery.level * 100 <= 50)
            document.getElementById("battery-icon").src = 'https://img.icons8.com/?size=100&id=96227&format=png&color=FFFFFF';
        else if (battery.level * 100 <= 75)
            document.getElementById("battery-icon").src = 'https://img.icons8.com/?size=100&id=96230&format=png&color=FFFFFF';
        else if (battery.level * 100 <= 100)
            document.getElementById("battery-icon").src = 'https://img.icons8.com/?size=100&id=96231&format=png&color=FFFFFF';

        document.getElementById("battery-level").innerText = (battery.level * 100) + "%";
    }
</script>