<template>
  <div class="col-md-12">
    <label for="teach_id">อาจาร์ยผู้สอน:</label>
    <select class="form-control" id="teach_id" name="teach_id">
      <option v-for="i in teacher" :key="i.id" :value="i.id">{{ i.user_id.first_name +' '+i.user_id.last_name }}</option>
    </select>
  </div>
</template>
<script>
export default {
    name: 'TeacherList',
    props: [ 'teacher' ],
    data () {

    },
}
</script>
