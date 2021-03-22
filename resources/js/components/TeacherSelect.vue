<template>
  <div class="row">
    <div class="col-md-6">
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
    <div class="col-md-6">
      <label for="subject_title">รายวิชา:</label>
      <input
        class="form-control"
        type="text"
        id="subject_title"
        name="subject_title"
        required
      />
    </div>
    <div class="col-md-12">
      <label for="teach_id">อาจาร์ยผู้สอน:</label>
      <select class="form-control" id="teach_id" name="teach_id">
        <option v-for="i in teacher" :key="i.id" :value="i.id">
          {{ i.user_id.first_name + " " + i.user_id.last_name }}
        </option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="on_date">รายวิชา:</label>
      <input
        v-model="on_date"
        class="form-control"
        type="date"
        id="on_date"
        name="on_date"
        required
      />
    </div>
    <div class="col-md-6">
      <label for="on_time">รายวิชา:</label>
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
  mounted () {
      this.on_date = new Date().toISOString().substr(0, 10);
  }
};
</script>
