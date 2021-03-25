<template>
  <div>
    <table class="table table-striped table-borderless">
      <thead>
        <tr>
          <th>#</th>
          <th>รายวิชา</th>
          <th>อาจารย์ผู้สอน</th>
          <th>วันที่</th>
          <th>เวลา</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="i in on_class_room" :key="i.id">
          <td>{{ i.id }}</td>
          <td>{{i.subject_id+'-'+ i.subject_title}}</td>
          <td>{{i.teach_id.user_id.first_name + '-' + i.teach_id.user_id.last_name}}</td>
          <td>{{i.on_date}}</td>
          <td>{{i.on_time}}</td>
          <td>
              <a :href="'/sublist/'+i.id" type="button" class="btn btn-sm btn-success">
                  <i class="fas fa-check"></i>
              </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
    name: 'OnClassRoom',
    props: ['on_class_room'],
    methods: {}
}
</script>
