<template>
  <div>
    <ul class="uk-list uk-list-striped uk-animation-toggle" v-for="(i, x) in rooms" :key="x">
      <li class="uk-margin uk-card uk-card-default uk-card-body">
        <div class="uk-grid-collapse uk-child-width-expand@s" tabindex="0" uk-grid>
          <div>
            ห้องเรียน:
            <strong>{{
              i.room_id.room_id.room_code + "-" + i.room_id.room_id.room_title
            }}</strong>
          </div>
          <div>
            รายวิชา:
            <strong>{{
              i.room_id.subject_id.subject_id +
              "-" +
              i.room_id.subject_id.subject_title
            }}</strong>
          </div>
          <div>
            เวลา: <strong>{{ i.at_time }}</strong>
          </div>
          <div>
            สถานะ: <strong>{{ return_status(i.is_absent) }}</strong>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  props: ["rooms"],
  mounted() {
    console.dir(this.rooms);
  },
  methods: {
    return_status(i) {
      let txt = "";
      if (i) {
        txt = "สาย";
      }
      return txt;
    },
  },
};
</script>
