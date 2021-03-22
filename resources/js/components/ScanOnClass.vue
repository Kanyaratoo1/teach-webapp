<template>
  <div>
    <table class="table table-striped table-borderless">
        <thead>
            <tr>
                <th>#</th>
                <th>รายวิชา</th>
                <th>ห้องเรียน</th>
                <th>วันที่</th>
                <th>เวลา</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(i, x) in objects" :key="i.id">
                <td>{{(x + 1)}}</td>
                <td>{{i.subject_id.subject_id +'-' + i.subject_id.subject_title}}</td>
                <td>{{i.room_id.room_title +' '+i.room_id.room_code}}</td>
                <td>{{i.room_date}}</td>
                <td>{{i.room_time}}</td>
                <td>
                    <a :href="'/sublist/'+i.id+'/register'" class="btn btn-sm btn-warning">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</template>
<script>
export default {
  props: ["objects"],
};
</script>
