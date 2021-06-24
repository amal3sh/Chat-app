<template>
    <div class="relative h-10 m-1">
        <div style = "border-top: 1px solid  #e6e6e6;" class = "grid grid-cols-6">
            <input
        type="text"
        v-model="message"
        @keyup.enter="sendMessage()"
        placeholder="Say Something...."
        class="col-span-5 outline-none p-1"
        />
        </div>
    </div>
</template>

<script>
import Input from '../../Jetstream/Input.vue'

export default
 {
     props:['room'],
          Input
}
</script>