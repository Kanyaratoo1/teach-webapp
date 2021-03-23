<template>
  <div>
    <table class="table table-striped table-borderless">
      <thead>
        <tr>
          <th>#</th>
          <th>รหัส</th>
          <th>ชื่อ-สกุล</th>
          <th>ตำแหน่ง</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="i in teacher" :key="i.id">
          <td>{{ i.id }}</td>
          <td>{{ i.user_id.usercode}}</td>
          <td>{{ i.user_id.first_name}} {{ i.user_id.last_name}}</td>
          <td>{{ i.description }}</td>
          <td>
              <a :href="'/teachers/'+i.id" type="button" class="btn btn-sm btn-danger">
                  <i class="fas fa-trash"></i>
              </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
    name: 'Teacher',
    props: [ 'teacher' ],
    data() {

    },
}
</script>
