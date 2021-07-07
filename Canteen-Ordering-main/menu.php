<!DOCTYPE html>
<head>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
    </head>
<h2 style="text-align: center;">Apne snacks yaha par order kare <3</h2>
    <body>
        
            <table style="width:100%">
<?php
    require "connect.php";
    $sql = 'SELECT * FROM menu';
    // echo $sql;
    $result = $conn->query($sql);
    $array = $result->fetch_assoc();
    echo $array['Dish']; 
    //var_dump($sql);
    echo $array['Price'];
    // var_dump($result);
    // var_dump($sql);

?>      


    <tr>
        <th><?=$array['Dish']?></th>
        <!-- <th><?=$Price?></th>
        <th><?='a'?></th>  -->
    </tr>
    <!-- <tr>
        <td style="text-align:center;">Samosa Pav</td>
        <td style="text-align:center;">12</td>
        <td style="text-align:center;"><button class="order">Order Here</button></td>
    </tr>
    <tr>
        <td style="text-align:center;">Batata Wada</td>
        <td style="text-align:center;">20</td>
        <td style="text-align:center;"><button class="order">Order Here</button></td>
    </tr>
    <tr>
        <td style="text-align:center;">Wada Pav</td>
        <td style="text-align:center;">16</td>
        <td style="text-align:center;"><button class="order">Order Here</button></td>
    </tr>
    <tr>
        <td style="text-align:center;">Vada Usal</td>
        <td style="text-align:center;">25</td>
        <td style="text-align:center;"><button class="order">Order Here</button></td>
    </tr> -->
            </table>
            </body>
            </html>

<!-- <snacks>
    <item>
        <name>Samosa Pav</name>
        <price>12</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Wada Pav</name>
        <price>12</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Batata Wada</name>
        <price>18</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Samosa Usal</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Vada Usal</name>
        <price>24</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Vada Samosa Usal</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dahi Samosa</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Usal Pav</name>
        <price>20</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Misal Pav</name>
        <price>32</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Bread Pakoda</name>
        <price>38</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Idli Sambhar</name>
        <price>25</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Mendu Wada Sambhar</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Idli Wada</name>
        <price>26</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dahi Idli</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Butter Idli</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Idli Fry</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dahi Misal Pav</name>
        <price>40</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Upma/Poha</name>
        <price>20</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dahi Kachori</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
</snacks>
<lunch>
    <item>
        <name>Chapati Bhaji</name>
        <price>38</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Chapati Paneer Bhaji</name>
        <price>43</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Puri Bhaji</name>
        <price>40</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Puri Paneer Bhaji</name>
        <price>43</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Potato Bhaji</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Panner Bhaji</name>
        <price>45</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Sada Bhaji</name>
        <price>35</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Raita</name>
        <price>18</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dahi(Curd)</name>
        <price>14</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Puri Plate</name>
        <price>18</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Chapati(Single)</name>
        <price>05</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dal Fry</name>
        <price>23</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Lunch</name>
        <price>48</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Lunch With Pulav</name>
        <price>53</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Lunh With Jira-Rice</name>
        <price>53</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dal Rice</name>
        <price>28</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dal Fry Rice</name>
        <price>40</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Dal Rice with Bhaji</name>
        <price>38</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Plain Dahi Rice</name>
        <price>38</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
</lunch>
<chinese>
    <item>
        <name>Haka Noodles</name>
        <price>48</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Shezwan Noodles</name>
        <price>54</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Singapore Noodles</name>
        <price>54</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Manchow Noodles</name>
        <price>54</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Manchurian Noodles</name>
        <price>57</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Triple Noodles</name>
        <price>57</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Chinese Bhel</name>
        <price>43</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Chinese Cheese Bhel</name>
        <price>63</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Fried Rice</name>
        <price>48</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Shezwan Rice</name>
        <price>54</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Singapore Rice</name>
        <price>54</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Manchow Rice</name>
        <price>58</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Manchurian Rice</name>
        <price>57</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Triple Shezwan Rice</name>
        <price>57</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Tomato Rice(With Dahi)</name>
        <price>48</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
</chinese>
<refreshments>
    <item>
        <name>Cocktail</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Water Melon</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Pineapple</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Grapes</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Pineapple + Water Melone</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Papaya</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Ice Tea</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Mosambi</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Orange</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Maramari</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Ganga Jmuna</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Masmelone</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
    <item>
        <name>Anar</name>
        <price>30</price>
        <button onclick="myFunction()">Add to Cart</button>
    </item>
</refreshments>
</menu>y -->