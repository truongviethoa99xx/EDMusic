<style>
    .card {
        position: relative;
        width: 300px;
        height: 150px;
        margin: 20px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        border-radius: 20px;
        background: linear-gradient(135deg,#d41e31,#491f8f);
        margin-top: 100px;
    }

    .card img {
        position: absolute;
        bottom: 0;
        left: 50%;
        height: 200px;
        transform: translateX(-50%);
        transition: 0.5s;
    }

    .card:hover img {
        left: 80%;
        height: 250px;
    }

    .card .content {
        position: relative;
        width: 50%;
        left: 20%;
        padding: 20px 20px 20px 40px;
        opacity: 0;
        vasability: hidden;
        transition: 0.5s;
        position: absolute;
        left: 10px !important;
    }

    .card:hover .content {
        opacity: 1;
        left: 0%;
        vasability: visible;
    }

    .card .content h2 {
        color: #fff;
        text-transform: uppercase;
        font-size: 2.5em;
        line-height: 1em;
    }

    .card .content p {
        color: #fff;
    }

    .card .content a {
        position: relative;
        display: inline-block;
        color: #111;
        padding: 10px 20px;
        border-radius: 10px;
        background: #fff;
        margin-top: 10px;
    }

    @media (max-width: 991px) {
        .card {
            position: relative;
            width: auto;
            min-width: 600px;
            transition: .5s;
            align-items: flex-start;
        }

        .card:hover {
            height: 600px;
        }

        .card:hover img {
            left: 50%;
            height: 350px;
        }

        .card .content {
            width: 100%;
            left: 0;
            padding: 40px;
        }
    }

    @media (max-width: 420px) {
        .card .content {
            padding: 30px;
        }

        .card:hover img {
            height: 300px;
        }
    }
</style>
<div class="card">
   <div class="content">
       <h2>Coi chừng t ă</h2>
       <p>Ca sĩ như c</p>
//        <a href="#">Read More</a>
    </div>
     <img src="https://o.remove.bg/downloads/d84269a2-b18c-43d5-8f17-2b3fc42162fe/justin-bieber-comedy-central-roast-celebrity-png-favpng-wjVde1FPn0Gd6FpWL8cLjqhr7_t-removebg-preview.png" alt="" />
</div>
