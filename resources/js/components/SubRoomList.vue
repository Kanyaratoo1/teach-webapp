<template>
  <div class="card-body">
    <table class="table table-striped table-borderless">
      <thead>
        <tr>
          <th>#</th>
          <th>ห้อง</th>
          <th>รายวิชา</th>
          <th>อาจาร์ยผู้สอน</th>
          <th>วดป.สอน</th>
          <th>เวลา</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="i in subject_room" :key="i.id">
          <td>{{ i.id }}</td>
          <td>{{ i.room_id.room_title + " " + i.room_id.room_code }}</td>
          <td>
            {{ i.subject_id.subject_id + "-" + i.subject_id.subject_title }}
          </td>
          <td>
            {{
              i.teach_id.user_id.first_name + " " + i.teach_id.user_id.last_name
            }}
          </td>
          <!-- <td>{{i.room_date + ' ' + i.room_time}}</td> -->
          <td>{{ check_day_on_week(i) }}</td>
          <td>{{ i.room_time }}</td>
          <td>
            <a
              :href="'/subroom/' + i.id"
              type="button"
              class="btn btn-sm btn-success"
              ><i class="fas fa-angle-right"></i
            ></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  name: "SubRoomList",
  props: ["subject_room"],
  mounted() {
    console.dir(this.subject_room);
  },
  methods: {
    check_day_on_week(i) {
      let x = [];
      if (i.sun_day) {
        x.push("อาทิตย์");
      }

      if (i.mon_day) {
        x.push("จันทร์");
      }
      if (i.tue_day) {
        x.push("อังคาร");
      }

      if (i.wed_day) {
        x.push("พุธ");
      }

      if (i.thu_day) {
        x.push("พฤหัสบดี");
      }

      if (i.fri_day) {
        x.push("ศุกร์");
      }

      if (i.sat_day) {
        x.push("เสาร์");
      }

      return x.join();
    },
  },
};
</script>
