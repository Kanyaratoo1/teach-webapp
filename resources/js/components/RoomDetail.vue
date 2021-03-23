<template>
  <table class="table table-striped table-borderless">
    <thead>
      <tr>
        <th>#</th>
        <th>รหัส</th>
        <th>ชื่อ-นักศึกษา</th>
        <th>วันที่</th>
        <th>เวลา</th>
        <th>สถานะ</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(i, x) in rooms" :key="i.id" :class="re_table_class(i.is_absent)">
        <td>{{x+1}}</td>
        <td>{{i.student_id.usercode}}</td>
        <td>{{i.student_id.first_name +' '+i.student_id.last_name}}</td>
        <td>{{i.at_date}}</td>
        <td>{{i.at_time}}</td>
        <td>{{restatus(i.is_absent)}}</td>
        <td></td>
      </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>{{rooms.length}}</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </tfoot>
  </table>
</template>
<script>
export default {
    name: 'RoomDetail',
    props: ['rooms'],
    methods: {
        restatus(i)
        {
            if (i)
            {
                return 'สาย'
            }
            return ''
        },
        re_table_class(i)
        {
            if (i)
            {
                return 'table-danger'
            }
            return ''
        }
    }
}
</script>
