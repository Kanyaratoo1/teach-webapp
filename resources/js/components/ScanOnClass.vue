<template>
  <div>
    <vue-qrcode value="https://www.1stg.me" />
    {{ objects }}
  </div>
</template>
<script>
import VueQrcode from "vue-qrcode";

export default {
  props: ["objects"],
  components: {
    VueQrcode,
  },
};
</script>
