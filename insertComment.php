<div class=" w-full flex justify-center">
    <form class="w-full md:w-2/5 m-2.5 flex flex-col m-2 rounded-xl border-red-800" action="ConfigComment.php" method="post">
        <div class=" rounded-xl p-1.5 border-red-100 border-2">
            <div>
                <textarea name="comment" class="w-full h-16 rounded-t-xl" style="resize:none;border:none" placeholder="O que esta pensando?" require></textarea>
                <!-- <input type="text" name="comment" placeholder="O que esta fazendo agora?"> -->
            </div>
            <div class="flex justify-end p-2">
                <input class="bg-gray-800 text-white p-2 rounded-full" type="submit" value="Comentar">
            </div>
        </div>
    </form>
</div>