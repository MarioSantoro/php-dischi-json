<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <header>
            <img src="https://cdn.icon-icons.com/icons2/3685/PNG/512/spotify_logo_icon_229290.png" alt="Logo spotify">
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-cs" v-for="(card , index) in items">
                        <div class="card-item text-center" @click="getDisc(index), removeDisplayNone()">
                            <img :src="card.poster" alt="poster Imager">
                            <h5 class="fw-bold text-white">{{card.title}}</h5>
                            <h6 class="text-white">{{card.author}}</h6>
                            <h5 class="fw-bold text-white">{{card.year}}</h5>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <div class="container-card-disactivated justify-content-center align-items-center">
            <button class="btn btn-primary position-absolute top-0 end-0 delete" @click="addDisplayNone()">X</button>
            <div class="card-disactivated" v-for="(card , index) in items">
                <div class="card-item text-center" @click="getDisc(index)" :class="index === activeIndex ? 'active' : '' ">
                    <img :src="card.poster" alt="poster Imager">
                    <h5 class="fw-bold text-white">{{card.title}}</h5>
                    <h6 class="text-white">{{card.author}}</h6>
                    <h5 class="fw-bold text-white">{{card.year}}</h5>
                </div>
            </div>
        </div>
    </div>
    <script src="./script/main.js"></script>
</body>

</html>