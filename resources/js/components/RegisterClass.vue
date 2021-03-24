<template>
  <div>
    <div class="d-flex justify-content-center">
      <vue-qrcode
        :value="'http://203.151.171.156/member/'+objects[0].username+'/'+objects[0].id + '/register'"
        class="rounded"
        alt="Cinque Terre"
        width="120"
        height="120"
      />
    </div>
    <div class="form-group" v-for="i in objects" :key="i.id">
      <div class="row">
        <div class="col-md-6">
          <label for="">รหัสวิชา:</label>
          <input class="form-control" :value="i.subject_id.subject_id" />
        </div>
        <div class="col-md-6">
          <label for="">รายวิชา:</label>
          <input class="form-control" :value="i.subject_id.subject_title" />
        </div>
        <div class="col-md-12">
          <label for="">สอนโดย:</label>
          <input
            class="form-control"
            :value="
              i.teach_id.user_id.first_name + '' + i.teach_id.user_id.last_name
            "
          />
        </div>
        <div class="col-md-6">
          <label for="">ตำแน่ง:</label>
          <input class="form-control" :value="i.teach_id.description" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="">วันที่สอน:</label>
          <input class="form-control" :value="i.room_date" />
        </div>
        <div class="col-md-6">
          <label for="">เวลา:</label>
          <input class="form-control" :value="i.room_time" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex justify-content-center">
        <button type="submit" class="btn btn-sm btn-success">
          <i class="fas fa-save"></i>&nbsp;ลงทะเบียน
        </button>
      </div>
    </div>
  </div>
</template>
<script>
import VueQrcode from "vue-qrcode";

export default {
  props: ["objects"],
  components: {
    VueQrcode,
  },
  mounted(){
      console.dir(this.objects)
  }
};
</script>
