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
        :value="subjects.subject_id"
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
        :value="subjects.subject_title"
      />
    </div>
    <div class="col-md-12 form-group">
      <label for="teach_id">อาจารย์ผู้สอน:</label>
      <select class="form-control" id="teach_id" name="teach_id">
        <option v-for="i in teachers" :key="i.id" :value="i.id">
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
            :value="subjects.sun_day"
            :checked="subjects.sun_day"
          />&nbsp;วันอาทิตย์</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="mon_day"
            name="mon_day"
            :value="subjects.mon_day"
            :checked="subjects.mon_day"
          />&nbsp;วันจันทร์</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="tue_day"
            name="tue_day"
            :value="subjects.tue_day"
            :checked="subjects.tue_day"
          />&nbsp;วันอังคาร</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="wed_day"
            name="wed_day"
            :value="subjects.wed_day"
            :checked="subjects.wed_day"
          />&nbsp;วันพุธ</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="thu_day"
            name="thu_day"
            :value="subjects.thu_day"
            :checked="subjects.thu_day"
          />&nbsp;วันพฤหัสบดี</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="fri_day"
            name="fri_day"
            :value="subjects.fri_day"
            :checked="subjects.fri_day"
          />&nbsp;วันศุกร์</label
        >
        <label
          ><input
            class="uk-checkbox"
            type="checkbox"
            id="sat_day"
            name="sat_day"
            :value="subjects.sat_day"
            :checked="subjects.sat_day"
          />&nbsp;วันเสาร์</label
        >
      </div>
    </div>
    <div class="col-md-6 form-group">
      <label for="on_time">เวลาที่สอน:</label>
      <input
        class="form-control"
        type="time"
        id="on_time"
        name="on_time"
        required
        :value="subjects.on_time"
      />
    </div>
  </div>
</template>
<script>
export default {
  name: "TeacherList",
  props: ["subjects", "teachers"],
  data() {
    return {
      on_date: null,
      on_time: null,
    };
  },
  mounted() {
    console.dir(this.subjects);
  },
};
</script>
