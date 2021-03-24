<template>
  <div class="card">
    <div class="card-header">
      ข้อมูลเพิ่มเติม
      <div class="float-right">
        <button
          type="button"
          class="btn btn-sm btn-success"
          @click="export_excel()"
        >
          <i class="fas fa-file-excel"></i>
        </button>
        <a href="/subroom" type="button" class="btn btn-sm btn-primary">
          <i class="fas fa-home"></i>
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="row d-flex justify-content-center">
        <vue-qrcode
          :value="'http://203.151.171.156/member/'"
          class="rounded"
          alt="Cinque Terre"
          width="120"
          height="120"
        />
      </div>
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
          <tr
            v-for="(i, x) in rooms"
            :key="i.id"
            :class="re_table_class(i.is_absent)"
          >
            <td>{{ x + 1 }}</td>
            <td>{{ i.student_id.usercode }}</td>
            <td>
              {{ i.student_id.first_name + " " + i.student_id.last_name }}
            </td>
            <td>{{ i.at_date }}</td>
            <td>{{ i.at_time }}</td>
            <td>{{ restatus(i.is_absent) }}</td>
            <td></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>{{ rooms.length }}</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</template>
<script>
import VueQrcode from "vue-qrcode";
import XLSX from "xlsx";
export default {
  name: "RoomDetail",
  props: ["rooms"],
  components: [VueQrcode],
  methods: {
    restatus(i) {
      if (i) {
        return "สาย";
      }
      return "";
    },
    re_table_class(i) {
      if (i) {
        return "table-danger";
      }
      return "";
    },
    export_excel() {
      let doc = [];
      this.rooms.map((i) => {
        doc.push({
          ลำดับ: doc.length + 1,
          รหัส: i.student_id.usercode,
          "ชื่อ-นักศึกษา":
            i.student_id.first_name + " " + i.student_id.last_name,
          วันที่: i.at_date,
          เวลา: i.at_time,
          สถานะ: this.restatus(i.is_absent),
        });
      });
      console.dir(doc);
      const dataWS = XLSX.utils.json_to_sheet(doc);
      const wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, dataWS);
      XLSX.writeFile(wb, "export.xlsx");
    },
  },
};
</script>
