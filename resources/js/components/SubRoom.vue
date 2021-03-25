<template>
  <div class="row">
    <div class="col-md-12 form-group">
      <label for="subject_id">รายวิชา:</label>
      <select class="form-control" id="subject_id" name="subject_id">
        <option v-for="i in subject_id" :key="i.id" :value="i.id">
          {{ i.subject_id + "-" + i.subject_title }}
        </option>
      </select>
    </div>
    <div class="col-md-12 form-group">
      <label for="teach_id">อาจารย์ผู้สอน:</label>
      <select class="form-control" id="teach_id" name="teach_id">
        <option v-for="i in teach_id" :key="i.id" :value="i.id">
          {{ i.user_id.first_name + " " + i.user_id.last_name }}
        </option>
      </select>
    </div>
    <div class="col-md-12 form-group">
      <label for="room_id">ห้องเรียน:</label>
      <select class="form-control" id="room_id" name="room_id">
        <option v-for="i in room_id" :key="i.id" :value="i.id">
          {{ i.room_code + "-" + i.room_title }}
        </option>
      </select>
    </div>
    <div class="col-md-12 form-group">
      <label>วันที่สอน:</label>
      <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="sun_day"
            name="sun_day"
          />&nbsp;วันอาทิตย์</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="mon_day"
            name="mon_day"
            checked
          />&nbsp;วันจันทร์</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="tue_day"
            name="tue_day"
          />&nbsp;วันอังคาร</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="wed_day"
            name="wed_day"
          />&nbsp;วันพุธ</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="thu_day"
            name="thu_day"
          />&nbsp;วันพฤหัสบดี</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="fri_day"
            name="fri_day"
          />&nbsp;วันศุกร์</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="sat_day"
            name="sat_day"
          />&nbsp;วันเสาร์</label
        >
      </div>
    </div>
    <div class="col-md-6 form-group">
      <label for="room_time">เวลา:</label>
      <input type="time" class="form-control" id="room_time" name="room_time" />
    </div>
  </div>
</template>
<script>
export default {
  name: "SubRoom",
  props: ["subject_id", "teach_id", "room_id"],
  mounted() {
    // console.dir(subject_id);
    // console.dir(teach_id);
    // console.dir(room_id);
  },
};
</script>
