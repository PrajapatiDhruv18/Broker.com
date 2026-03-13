<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Property Listings</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
        }

        /* Top section */
        .top {
            background: linear-gradient(90deg, #6d28d9, #4338ca);
            padding: 30px;
            color: #fff;
        }

        .search-bar {
            background: #fff;
            max-width: 900px;
            margin: auto;
            border-radius: 40px;
            padding: 10px 15px;
            display: flex;
            gap: 10px;
        }

        .search-bar select {
            flex: 1;
            border: none;
            outline: none;
        }

        .search-bar button {
            background: #10b981;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
        }

        .tabs {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }

        .tabs button {
            background: none;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            padding-bottom: 5px;
        }

        .tabs .active {
            border-bottom: 2px solid #fff;
        }

        /* Listings */
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 0 15px;
        }

        .card {
            background: #fff;
            display: flex;
            gap: 15px;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            cursor: pointer;
        }

        .img {
            width: 180px;
            height: 120px;
            background: #e5e7eb;
            border-radius: 10px;
            flex-shrink: 0;
        }

        .details {
            flex: 1;
        }

        .price {
            font-weight: bold;
            margin-top: 8px;
        }

        .loader {
            text-align: center;
            padding: 20px;
            display: none;
        }

        .img {
    width: 180px;
    height: 120px;
    background: #e5e7eb;
    border-radius: 10px;
    flex-shrink: 0;
    overflow: hidden;   /* ADD THIS */
}
    </style>
</head>

<body>

    <div class="top">
        <div class="search-bar">
            <select>
                <option>Select City</option>
                <option>Hyderabad</option>
                <option>Bangalore</option>
            </select>
            <button>Search</button>
        </div>

        <div class="tabs">
            <button class="active">Buy</button>
            <button>Rent</button>
            <button>Commercial</button>
            <button>PG/Co-Living</button>
            <button>Plots</button>
        </div>
    </div>

    <div class="container" id="listings"></div>
    <div class="loader" id="loader">Loading...</div>

    <script>
        let page = 1;
        let loading = false;

        function loadData() {
            if (loading) return;
            loading = true;
            document.getElementById("loader").style.display = "block";

            fetch("load-products.php?page=" + page)
                .then(res => res.text())
                .then(data => {
                    if (data.trim() !== '') {
                        document.getElementById("listings")
                            .insertAdjacentHTML("beforeend", data);
                        page++;
                    }
                    loading = false;
                    document.getElementById("loader").style.display = "none";
                });
        }

        function openProduct(id) {
            window.location.href = "product.php?id=" + id;
        }

        window.addEventListener("scroll", () => {
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 200) {
                loadData();
            }
        });

        loadData();
    </script>

</body>
</html>
