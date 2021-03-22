<template>
  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <label for="subject_id">รายวิชา:</label>
        <select class="form-control" id="subject_id" name="subject_id">
          <option v-for="i in subject_id" :key="i.id" :value="i.id">
            {{ i.subject_id +'-' + i.subject_title }}
          </option>
        </select>
      </div>
      <div class="col-md-12">
        <label for="teach_id">อาจาร์ยผู้สอน:</label>
        <select class="form-control" id="teach_id" name="teach_id">
          <option v-for="i in teach_id" :key="i.id" :value="i.id">
            {{ i.user_id.first_name + " " + i.user_id.last_name }}
          </option>
        </select>
      </div>
      <div class="col-md-12">
        <label for="room_id">ห้องเรียน:</label>
        <select class="form-control" id="room_id" name="room_id">
          <option v-for="i in room_id" :key="i.id" :value="i.id">
            {{ i.room_code + "-" + i.room_title }}
          </option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="room_date">วันที่:</label>
        <input
          type="date"
          class="form-control"
          id="room_date"
          name="room_date"
        />
      </div>
      <div class="col-md-6">
        <label for="room_time">เวลา:</label>
        <input
          type="time"
          class="form-control"
          id="room_time"
          name="room_time"
        />
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "SubRoom",
  props: ["subject_id", "teach_id", "room_id"],
  mounted() {
    console.dir(subject_id);
    console.dir(teach_id);
    console.dir(room_id);
  },
};
</script>
