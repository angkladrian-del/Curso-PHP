<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background-color: #111;
            color: white;
        }

        /* HEADER */
        header{
            background: #1db954;
            padding: 20px;
        }

        nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1{
            font-size: 2rem;
        }

        nav ul{
            display: flex;
            list-style: none;
            gap: 20px;
        }

        nav a{
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover{
            color: black;
        }

        /* HERO */
        .hero{
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=1200&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .hero-content h2{
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .hero-content p{
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn{
            display: inline-block;
            padding: 12px 25px;
            background: #1db954;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn:hover{
            background: #17a74a;
        }

        /* SECCIÓN */
        .section{
            padding: 60px 20px;
            text-align: center;
        }

        .section h2{
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .cards{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card{
            background: #222;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .card:hover{
            transform: scale(1.03);
        }

        .card img{
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card h3{
            margin: 15px 0;
        }

        .card p{
            padding: 0 15px 20px;
        }

        /* FOOTER */
        footer{
            background: #000;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>