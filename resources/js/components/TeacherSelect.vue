<template>
  <div class="row">
    <div class="col-md-6 form-group">
      <label for="subject_id">รหัสวิชา:</label>
      <input
        class="form-control"
        type="text"
        id="subject_id"
        name="subject_id"
        required
        autofocus
      />
    </div>
    <div class="col-md-6 form-group">
      <label for="subject_title">รายวิชา:</label>
      <input
        class="form-control"
        type="text"
        id="subject_title"
        name="subject_title"
        required
      />
    </div>
    <div class="col-md-12 form-group">
      <label for="teach_id">อาจารย์ผู้สอน:</label>
      <select class="form-control" id="teach_id" name="teach_id">
        <option v-for="i in teacher" :key="i.id" :value="i.id">
          {{ i.user_id.first_name + " " + i.user_id.last_name }}
        </option>
      </select>
    </div>
    <div class="col-md-12 form-group">
      <label for="on_date">วันที่สอน:</label>
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
      <label for="on_time">เวลาที่สอน:</label>
      <input
        v-model="on_time"
        class="form-control"
        type="time"
        id="on_time"
        name="on_time"
        required
      />
    </div>
  </div>
</template>
<script>
export default {
  name: "TeacherList",
  props: ["teacher"],
  data() {
    return {
      on_date: null,
      on_time: null,
    };
  },
  mounted() {
    this.on_date = new Date().toISOString().substr(0, 10);
  },
};
</script>
