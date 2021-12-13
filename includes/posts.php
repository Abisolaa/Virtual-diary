<div class="pages-container">
            <div class="px-2">
                <div class="flex-row-between py-2">
                    <h4>Pages</h4>
                    <div class="add-page-btn">
                       <a href="addPost.php">
                          <svg style="width: 2em; height: 2em;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                       </a>
                    </div>
                </div>
                <div>
                    <input type="search" placeholder="Search Pages">
                </div>
            </div>
            <div class="text-sm-bold px-2 pt-4 pb-2">Recent</div>
            <div class="px-2 pages-list">
                <div class="pages-list-item p-2">
                    <div class="page-list-item-title" onclick="clickMe()">The most horrible day of my life</div>
                    <span class="page-list-item-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos asperiores debitis enim exercitationem nisi quas amet. Saepe iste voluptas officia aperiam sunt cum odit! Provident cum hic incidunt a id.
                    Voluptas doloremque tempore, voluptatem molestiae natus deserunt, obcaecati quo aperiam esse velit odio eos voluptate illo fuga iusto cupiditate culpa possimus dolorum eligendi, temporibus repellendus cumque ipsum reprehenderit? Dicta, quos!
                    Deleniti veniam ab, suscipit ad assumenda, sapiente doloremque eum adipisci sit consequatur, delectus consequuntur excepturi sint laudantium? Totam non, inventore delectus quibusdam harum, quam explicabo ullam optio voluptas neque necessitatibus.
                    Mollitia fuga, quam ut repellat tempora consectetur sunt voluptatibus eum deleniti! Deleniti expedita porro iste repellat tempore ratione vitae placeat, nesciunt doloremque inventore dolorum nulla animi reprehenderit unde aliquam! Dolorem.
                    Esse maxime eius modi. Consequuntur accusamus deserunt, nostrum nesciunt a recusandae nam, quae nulla quaerat necessitatibus ex eum dolor hic aut soluta eveniet totam. Aperiam veritatis saepe ducimus rem aut!
                    Quibusdam illum ea, eum reprehenderit dolores iure, consequuntur ipsum fuga facilis explicabo natus nulla voluptatum magni reiciendis deleniti fugit. Odit, dolore aspernatur exercitationem at quas ipsam? Nam magni facere asperiores.
                    Fugiat, est. Commodi excepturi explicabo quisquam? Nam reprehenderit porro sunt maxime ipsam tempore nesciunt doloremque. Sint, neque autem. Ipsam nihil necessitatibus cumque quisquam tempore corrupti fuga explicabo et quasi impedit.
                    Est libero temporibus illum rem nostrum assumenda ducimus, dolorem laboriosam accusamus, consequuntur delectus accusantium. Molestias, omnis laudantium! Nam, facere reprehenderit neque ut fugit placeat exercitationem, doloribus, recusandae nostrum mollitia in.
                    Non nobis distinctio velit illo, magni a maxime, voluptatibus ratione cum pariatur dignissimos esse reiciendis neque voluptas harum impedit amet autem quos eum doloremque. Possimus aspernatur incidunt natus repellendus cumque.
                    Praesentium illum neque eos aliquid perspiciatis quo totam aspernatur eum sed minus officia inventore nemo iure, repudiandae sit similique natus explicabo laborum facilis! Alias, quam. Repudiandae reprehenderit ut suscipit tenetur.</span>
                </div>
                    <hr>
                <?php
                
                    for($i = 0 ; $i < 6 ; $i++ ){
                
                ?>
                  
                  <a href="home.php" style="    color: #fff;text-decoration: none;">
                        <div class="pages-list-item p-2">
                                <div class="page-list-item-title">My first crush ❤️</div>
                                <span class="page-list-item-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, rerum? Ducimus rerum impedit sunt voluptate ut culpa aspernatur voluptatum quia nesciunt facilis eaque aliquid, molestias nihil beatae, dolore ad sint!</span>
                        </div>
                  </a>
                    
                <?php } ?>

                <div class="text-sm-bold text-center px-2 pt-4 pb-2">Keep Writing More Pages</div>
            </div>
        </div>