<template>
    <div>
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10 mx-auto">
		<div class="text-center">
			<h2 class="mt-2 text-3xl font-bold text-gray-900">
				File Upload!
			</h2>
			<p class="mt-2 text-sm text-gray-400">취미 활동을 찍어서 올려주세요 !</p>
		</div>
        <form class="mt-8 space-y-3" action="#" method="POST">
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">취미 이름 받아오기</label>
                            <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="" placeholder="comment">
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-70 p-4 group text-center">
                                <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                    <div class="flex flex-auto max-h-40 w-2/5 mx-auto -mt-4">
                                    <img class="has-mask h-50 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
                                    </div>
                                </div>
                                <input type="file">
                            </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Upload
                    </button>
                    </div>
        </form>
	</div>
</div>

</template>

<script>
import {defineComponent} from 'vue'

export default defineComponent({
    component:{},
   
}) 
</script>